import frontmatter
import mysql.connector   

ENV = sys.argv[1] if len(sys.argv) > 1 else 'production'
INPATH = sys.argv[2] if len(sys.argv) > 2 else 'songs'

if ENV == 'production':
	cnx = mysql.connector.connect(host="localhost", user="fsekt_sangbok", passwd="!HTyJnsdJh6DHY", db="fsekt_sangbok", charset='utf8')
elif ENV == 'local':
	cnx = mysql.connector.connect(host="localhost", user="sangbok", passwd="sangbok", db="sangbok", charset='utf8')
cursor = cnx.cursor()

cursor.execute("SELECT * FROM songs")

for row in cursor.fetchall():
    with open('src3/%d-%d.md' % (row[1], row[2]), 'w') as f:
    	f.write('---\n')
    	f.write('title: |\n  %s\n' % row[3].strip().replace('\n', '\n  '))
    	if row[5]:
    		f.write('melody: |\n  %s\n' % row[5].strip().replace('\n', '\n  '))
    	if row[4]:
    		f.write('author: |\n  %s\n' % row[4].strip().replace('\n', '\n  '))
    	f.write('---\n')
    	f.write(row[6])
