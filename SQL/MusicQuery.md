### Query Examples: 

_(i)  all the data joined up sorted in ascending order by the album title_

`SELECT Track.title, Artist.name, Album.title, Genre.name 
    FROM Track JOIN Genre JOIN Album JOIN Artist 
    ON Track.genre_id = Genre.genre_id AND Track.album_id = 
    Album.album_id AND Album.artist_id = Artist.artist_id
 ORDER BY Album.title ASC;`
 
 name
 
Rock

Rock

Metal

Metal

 _(ii) All the albums_
 
 `SELECT * FROM album`
  
 album_id_____| title_________|artist_id
 
1_____________|Who Made Who___|2

2_____________|IV_____________|1


_(iii) select the albums of each artist_

`SELECT name, title FROM artist
JOIN album ON (artist.artist_id=album.album_id);`

name__________|title

Led Zepplin__|Who Made Who

AC/DC________|IV

_(iv)  all of the genres for a particular artist_

`SELECT * FROM genre JOIN artist ON(genre.genre_id=artist_id) WHERE artist.name="Led Zepplin"`

genre_id________|name____________|artist_id____|name
1_______________|Rock____________|1____________|Led Zepplin


_(v)  all of the genres for a particular artist, neatened_

`SELECT genre.name, artist.name FROM genre JOIN artist ON(genre.genre_id=artist_id) WHERE artist.name="Led Zepplin"`

name_________|name
Led Zepplin__|Rock




