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
  
 album_id     | title         |artist_id
1             |Who Made Who   |2
2             |IV             |1
