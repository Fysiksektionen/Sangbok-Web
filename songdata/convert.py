import os, os.path
import re
import json
import mysql.connector   

cnx = mysql.connector.connect(user='sangbok', password='sangbok',
                              host='127.0.0.1',
                              database='sangbok',
                              charset='utf8')

cursor = cnx.cursor()

add_song = ("INSERT INTO songs (chapter_id, number, title, author, melody, text) VALUES (%(chapter)s, %(number)s, %(title)s, %(author)s, %(melody)s, %(text)s)")


inpath = 'src'
outpath = 'out'
songfiles = [ f for f in os.listdir(inpath) if os.path.isfile(os.path.join(inpath, f)) ]

songpattern = re.compile('(?:<titel>(?P<title>[^<]*))?(?:<melodi>(?P<melody>[^<]*))?(?:<author>(?P<author>[^<]*))?(?:<text>(?P<text>.*))?', re.MULTILINE | re.DOTALL)

#DEBUG
#songfiles = songfiles[118:119]

for songpath in songfiles:
  print(songpath)
  with open(os.path.join(inpath, songpath), encoding="utf-8") as songfile:
    songtext = songfile.read()
    song = songpattern.match(songtext).groupdict()

    song.update((k, v.strip()) if v else (k, None) for k, v in song.items())
    songnumber = songpath.split('-')
    song["chapter"] = int(songnumber[0])
    song["number"] = int(songnumber[1].split('.')[0])
    cursor.execute(add_song, song)

cnx.commit()
cursor.close()
cnx.close()