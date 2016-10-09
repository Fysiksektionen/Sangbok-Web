import sys
import time
import os, os.path
import csv
import frontmatter
import mysql.connector   

ENV = sys.argv[1] if len(sys.argv) > 1 else 'production'
INPATH = sys.argv[2] if len(sys.argv) > 2 else 'songs'

if ENV == 'production':
	cnx = mysql.connector.connect(host="localhost", user="fsekt_sangbok", passwd="!HTyJnsdJh6DHY", db="fsekt_sangbok", charset='utf8')
elif ENV == 'local':
	cnx = mysql.connector.connect(host="localhost", user="sangbok", passwd="sangbok", db="sangbok", charset='utf8')
cursor = cnx.cursor()

# Insert chapters
cursor.execute('TRUNCATE TABLE chapters');
add_chapter = ("INSERT INTO chapters (id, chapter) VALUES (%(id)s, %(chapter)s)")
with open('chapters.csv', 'r') as csvfile:
	chapterreader = csv.reader(csvfile)
	for chapter in chapterreader:
		chapter = {'id': chapter[0], 'chapter': chapter[1]}
		cursor.execute(add_chapter, chapter)

# Insert songs
cursor.execute('TRUNCATE TABLE songs');
add_song = ("INSERT INTO songs (chapter_id, number, title, author, melody, text) VALUES (%(chapter)s, %(number)s, %(title)s, %(author)s, %(melody)s, %(text)s)")
songfiles = [ f for f in os.listdir(INPATH) if os.path.isfile(os.path.join(INPATH, f)) ]
for songpath in songfiles:
  with open(os.path.join(INPATH, songpath), 'r') as songfile:
    song = frontmatter.load(songfile)
 
    songnumber = songpath.split('-')
    song["chapter"] = int(songnumber[0])
    song["number"] = int(songnumber[1].split('.')[0])
    
    song_dict = dict(song)
    if 'author' not in song_dict:
      song_dict['author'] = ''
    if 'melody' not in song_dict:
      song_dict['melody'] = ''
    song_dict['text'] = song.content

    cursor.execute(add_song, song_dict)

# Update manifest to notify offline cahced clients
with open('sangbok.manifest.tpl', 'r') as f:
	mandata = f.read()
with open('../public/sangbok.manifest', 'w') as manfile:
	manfile.write(mandata % int(time.time()))

cnx.commit()
cursor.close()
cnx.close()