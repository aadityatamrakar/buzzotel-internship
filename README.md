# Buzzotel Intership Challenge

Are you a movie buff? Are you someone who would rattle out names of 10 other interesting movies, when someone mentions the name of a movie that they enjoyed? Even if you are not one, we are sure you have one such friend around you.

Can you create a robotic clone of yourself or your friend who is a movie buff? Welcome to the Buzzotel Movie Challenge. Your input is a list of 250 movies along with information about these movies. We would like you to write a program that can identify for every movie in the list, 10 other similar / related movies in the same list in descending order of "similarity". You can define "similarity" however you deem fit for this exercise.

### Input

A file with data from 250 movies formatted as json, similar to the input in the "example data" section below.

### Output

A json formatted file, similar to output in the "example data" section below.

You can use any algorithm you find effective to do this task. Your solution will be evaluated on your problem solving skills, clarity of code and its performance.

### Example Data

You will find a list of records in the attached input file, each record describing a movie via various attributes.

```
{ 
    "movie_id": 1, 
    "rating": "9.3", 
    "votes": "1,318,626", 
    "description": "Two imprisoned men bond over a number ....", 
    "title": "The Shawshank Redemption", 
    "poster": "", 
    "release_date": "14 October 1994", 
    "director": "Frank Darabont", 
    "storyline": "Andy Dufresne is a young and successful ...", 
    "stars": [ "Tim Robbins", "Morgan Freeman", "Bob Gunton" ], 
    "year": "1994", 
    "genre": [ "Crime", "Drama" ], 
    "gallery": [ "unknown1394846836.CB379391227.png", ], 
    "running_time": "142min" 
}
```

### Your output must be in the following format:

```
{ 
    "The Shawshank Redemption": ["The Green Mile", "The Bucket List", "Rain Man", ....], 
    "Fight Club": ["Donnie Darko", "Memento", ...], 
    ... 
}
```
