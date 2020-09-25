
import dns.resolver
import spf
import re
domain = 'villagevw.com'
#for x in dns.resolver.resolve(domain, 'MX'):
    # print(x.to_text())
     #print('Host', x.exchange, 'has preference', x.preference)
     #n = spf.check(i='204.79.197.212', s='', h=x)
    # print (n);
    # print (n);
try:
 answers = dns.resolver.resolve(domain, 'TXT')
 for rdata in answers:
   for txt_string in rdata.strings:
        x = re.search("^[TXT: b'v=spf1]+", txt_string.decode('utf-8'))
        if (x):
         print('TXT:', txt_string)
except:
 print("its error")
