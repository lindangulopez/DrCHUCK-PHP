### Query Examples: 

_(i)  all the data joined up sorted in ascending order by the album title_

`SELECT Track.title, Artist.name, Album.title, Genre.name 
    FROM Track JOIN Genre JOIN Album JOIN Artist 
    ON Track.genre_id = Genre.genre_id AND Track.album_id = 
    Album.album_id AND Album.artist_id = Artist.artist_id
 ORDER BY Album.title ASC;`


| name           | 
| :------------- | 
|  Rock          |
|  Rock          |
|  Metal         |
|  Metal         |



 _(ii) All the albums_
 
 `SELECT * FROM album`

|  album_id      |  title          | artist_id    |
| :------------- | :-------------: | -----------: |
| 1              | Who Made Who    | 2            |
| 2              | IV              | 1            |

_(iii) select the albums of each artist_

`SELECT name, title FROM artist
JOIN album ON (artist.artist_id=album.album_id);`


| artist.artist_id       | album.album_id  |
| :--------------------- | :-------------: | 
|  Led Zepplin           | Who Made Who    | 
|  AC/DC                 | IV              |

_(iv)  all of the genres for a particular artist_

`SELECT * FROM genre JOIN artist ON(genre.genre_id=artist_id) WHERE artist.name="Led Zepplin"`

| genre.genre_id   | genre.name     | artist_id     |  artist.name     |
| :--------------- | :------------: | :------------ | :--------------: | 
| 1                | Rock           |          1    | Led Zepplin      | 


_(v)  all of the genres for a particular artist, neatened_

`SELECT genre.name, artist.name FROM genre JOIN artist ON(genre.genre_id=artist_id) WHERE artist.name="Led Zepplin"`

| genre.name      | artist.name     |
| :-------------- | :-------------: | 
|  Led Zepplin    | Rock            |


