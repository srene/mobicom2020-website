import sys
f=open('./octable.csv').read().split('\n')

# ['Ali Razeen', 'Publications Chair', 'University of British Columbia', 'alrazeen@cs.ubc.ca', '\r']
# ['Yuanchao Shu', 'Registration Chair', 'Microsoft', 'yuanchao.shu@microsoft.com', '']

# <tr>
# <td class="ocTableTitle"><b>General Co-Chairs</b></td>
# <td class="ocTablePerson"><a href="https://sharadagarwal.net/">Sharad Agarwal</a> (Microsoft)</td>
# </tr>

# <tr>
# <td></td>
# <td class="ocTablePerson"><a href="https://www.linkedin.com/in/ben-greenstein-5070345/">Ben Greenstein</a> (Google)</td>
# </tr>

# <tr>
# <td class="ocTableTitle"><b>General Vice Chair</b></td>
# <td class="ocTablePerson"><a href="https://www.cs.stonybrook.edu/people/faculty/ArunaBalasubramanian">Aruna Balasubramanian</a> (Stony Brook University)</td>
# </tr>


def gen1():
	outfile=open('./octable2.php','w+')
	counter=0

	counter=0

	stripe=False
	for i in f:
		elts=i.split(',')
		
		if len(elts[1])>0:
			counter+=1
			stripe=not stripe

		print elts
		if stripe:
			out='<tr class="stripe">\n'
			if len(elts[1])>0:
				out+='<td class="ocTableTitle" rowspan="'+elts[-1].strip()+'"><b>'+elts[1]+'</b></td>\n'
		else:
			out="<tr>\n"
			if len(elts[-1].strip())>0:
				out+='<td class="ocTableTitle" rowspan="'+elts[-1].strip()+'"><b>'+elts[1]+'</b></td>\n'

		if len(elts)==7:
			out+='<td class="ocTablePerson"><a href="'+elts[5].strip()+'">'+elts[0]+'</a> - '+elts[2][1:]+', '+elts[3][:-1]+'</td>\n'
		else:
			out+='<td class="ocTablePerson"><a href="'+elts[4].strip()+'">'+elts[0]+'</a> - '+elts[2]+'</td>\n'

		out+="</tr>\n\n"
		# print out
		# break
		outfile.write(out)
		counter+=1
	# outfile.write('</table>')

def gen2():
	outfile=open('./octable3.php','w+')

	counter=0
	for i in f:
		out="<tr>\n"
		elts=i.split(',')
		print elts
		out+='<th scope="row">'+elts[1]+'</th>\n'
		if len(elts)==6:
			out+='<td><a href="'+elts[5].strip()+'">'+elts[0]+'</a> ('+elts[2]+elts[3]+')</td>\n'
		else:
			out+='<td><a href="'+elts[4].strip()+'">'+elts[0]+'</a> ('+elts[2]+')</td>\n'
		out+="</tr>\n\n"
		print out
		# break
		outfile.write(out)
		counter+=1
	# outfile.write('</table>')
gen1()
# gen2()
# <tr>
# <th scope="row">General Co-Chairs</td>
# <td><a href="https://sharadagarwal.net">Sharad Agarwal</a> (Microsoft)</td>
# </tr>




































