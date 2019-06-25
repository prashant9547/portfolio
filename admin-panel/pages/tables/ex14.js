$(function() {

    // get list of all generes and display them in #genres nav as links
  
    $.getJSON('https://api.themoviedb.org/3/genre/movie/list?api_key=a3f94f4eef2cf4c60fdea3d5a76d1da4', function (data) {
      //console.log(data);
      $.each(data.genres, function (i, genre) {

          // in a button to take  gener id and name store 
        var button = '<button data-id="'+genre.id+'">'+genre.name+'</button>';
        // to append the all button to the sequence
        $('#genres nav').append(button);
      });
    });
  
    // listen for click on genre title and retrieve the list of movie titles for that genre
  
    $('#genres nav').on('click', 'button', function () {
      $('#films nav').empty();
      //first empty data of that film detail
      $('#film-details .col').empty();

      //to take the perticluer id with data
      var id = $(this).data('id'); 
      $.getJSON('https://api.themoviedb.org/3/genre/'+id+'/movies?api_key=a3f94f4eef2cf4c60fdea3d5a76d1da4', function (data) {
        $.each(data.results, function (i, film) {
          //console.log(film);
          // to store the information about film id and title in button
          var button = '<button data-id="'+film.id+'">'+film.title+'</button>';
          // to append the detail to button
          $('#films nav').append(button);
        })
      });
    });
  
    // listen for click on film title and display the film details below in #film-details
  
    $('#films nav').on('click', 'button', function () {
      var id = $(this).data('id');
      $.getJSON('https://api.themoviedb.org/3/movie/'+id+'?api_key=a3f94f4eef2cf4c60fdea3d5a76d1da4', function (data) {
        //console.log(data);
        var detailsLeft = '<a href="'+data.homepage+'" target="_blank">'+
                            '<img src="http://image.tmdb.org/t/p/w500/'+data.poster_path+'" alt="'+data.title+'">'+
                          '</a>',
            detailsRight = '<h1>'+data.title+'</h1>'+
                           '<p>'+data.overview+'</p>'+
                           '<p>Score: '+data.vote_average+'</p>'+
                           '<p>TagLine : '+data.tagline+'</p>'+
                           '<p>Original_language : '+data.original_language+'</p>'+
                           '<p>Status : '+data.status+'</p>'+
                           '<p>Release_date : '+data.release_date+'</p>'+
                           '<p>Vote_Count : '+data.vote_count+'</p>';
        $('#film-details .col.left').html(detailsLeft);
        $('#film-details .col.right').html(detailsRight);
      });
    });
  
  });