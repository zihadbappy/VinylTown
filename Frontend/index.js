var targetInput = document.getElementById('searchbar'),
    results = document.getElementById('autocomplete-results'),
    AlbumList = ['After Hours - The Weekend', 'Blond - Frank Ocean', 'Call My by Your Name', 'Souvlaki - Slowdive',
    'Random Access Memories - Daft Punk' ,'Ocean - Anuv Jain',  
    'Future Nostalgia - Dua Lipa', 'Inside - Bo Burnham',
    'Punisher - Phobe Bridgers','What Do You Know About Cars - Declan',
    'Her - Arcade Fire','illinois - Sufjan Stevens','AM- Arctic Monkeys',
    'The Bends - Radiohead','Hardwired - Metallica',    
    'Animals - Pink Floyd','A Day to Remember - The Beatles',
    'Queen - Queen','Colma - Buckethead'
],
    matches = [],
    resultsCursor = 0;

 AlbumList.sort()

    targetInput.focus()

    targetInput.addEventListener("keyup", function(event){
        results.innerHTML=""
        toggleResults("hide")

        if(this.value.length>0){
            matches=getMatches(this.value)
        }

        if(matches.length>0)
        {
            displayMatches(matches)
        }
    })

    function displayMatches(matchList) {
        var j = 0;
    
        while (j < matchList.length) {
            results.innerHTML += '<li class="result">' + matchList[j] + '</li>';
            j++;
        }
    
        // Show the results
        toggleResults('show');
    }
    

    function getMatches(inputText) {
        var matchList = [];
    
        for (var i = 0; i < AlbumList.length; i++) {
            if (AlbumList[i].toLowerCase().indexOf(inputText.toLowerCase()) != -1) {
                matchList.push(AlbumList[i]);
            }
        }
    
        return matchList;
    }


    function toggleResults(action) {
        if (action == 'show') {
            results.classList.add('visible');
        } else if (action == 'hide') {
            results.classList.remove('visible');
        }
    }

//------------------------------------------
//--------------Slider Script---------------
var slides = document.getElementsByClassName('slide'),
    slider = document.getElementById('slider'),
    cursor = 0,
    slideWidth = 0,
    topHeight = 0,
    slideCount = slides.length;

if (slideCount > 0) {
    // Get the slide width
    slideWidth = slides[0].offsetWidth;

    // Set the proper left value for each slide
    for (var i = 0; i < slideCount; i++) {
        slides[i].style.left = slideWidth * i + "px";
    }

    // Calculate tallest slide
    calculateTallestSlide();

    // Add the animated class to each slide
    for (i = 0; i < slideCount; i++) {
        slides[i].classList.add('animated');
    }

    // Add an event listener for next button
    document.getElementById('next').addEventListener('click', function(event) {
        event.preventDefault();

        if (cursor < slideCount - 1) {
            moveSlides('forward');
            cursor++;
        }
    });

    // Add an event listener for previous button
    document.getElementById('prev').addEventListener('click', function(event) {
        event.preventDefault();

        if (cursor > 0) {
            moveSlides('backward');
            cursor--;
        }
    });

    // Add event listener for window resize
    window.addEventListener('resize', function() {
        // Get the new slide width
        slideWidth = slides[0].offsetWidth;

        // Recalculate the left position of the slides
        for (i = 0; i < slides.length; i++) {
            if (i <= cursor) {
                slides[i].style.left = "-" + slideWidth * (cursor - i) + "px";
            } else if (i > cursor) {
                slides[i].style.left = slideWidth * (i - cursor) + "px";
            }
        }

        // Recalculate the height of the tallest slide
        calculateTallestSlide();
    });
}

// Declare a function that calculates the tallest slide
function calculateTallestSlide() {
    for (var i = 0; i < slideCount; i++) {
        if (slides[i].offsetHeight > topHeight) {
            topHeight = slides[i].offsetHeight;
        }
    }

    slider.style.height = topHeight + "px";
}

// Declare a function that will change the slide position
function moveSlides(direction) {
    for (var j = 0; j < slides.length; j++) {
        if (direction == "backward") {
            slides[j].style.left = +slides[j].style.left.replace(/[^-\d\.]/g, '') + slideWidth + "px";
        } else if (direction == "forward") {
            slides[j].style.left = +slides[j].style.left.replace(/[^-\d\.]/g, '') - slideWidth + "px";
        }
    }
}
