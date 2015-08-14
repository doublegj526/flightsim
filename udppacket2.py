import csv
import socket

with open("foo.txt", "r+") as f:
    UDP_IP = "198.123.53.218"
    UDP_PORT = 9999
    sock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM) # UDP
    sock.bind((UDP_IP, UDP_PORT))
    while(1):
      try:
        sock.settimeout(1)
        dat, _ = sock.recvfrom(500) # buffer size is 1024 bytes
        data = dat.split(':')
        f.seek(0) # rewind
        f.write(str(data[0] + " " + str(data[1] + " " + str(data[2])))) # write the new line before
        print dat
      except socket.timeout:
        break