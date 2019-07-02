import sys
f=open('./pc.csv').read().split('\n')
outfile=open('./pctable.php','w+')

# outfile.write('<table class="mytable">\n')

counter=0
for i in f:
	if counter%2==0:
		out='<tr>\n'
	else:
		out="<tr>\n"
	elts=i.split(',')
	if len(elts)==3:
		out+='<td align="left" width="30%"><a href="'+elts[2].strip()+'">'+elts[0].strip()+'</a></td>\n'
		out+='<td align="left" width="50%"">'+elts[1].strip()+'</td>\n'
	if len(elts)==4:
		out+='<td align="left" width="30%"><a href="'+elts[3].strip()+'">'+elts[0].strip()+'</a></td>\n'
		out+='<td align="left" width="50%"">'+elts[1].strip()[1:]+', '+elts[2].strip()[:-1]+'</td>\n'
	out+='</tr>\n'
	outfile.write(out)
	counter+=1
# outfile.write('</table>')