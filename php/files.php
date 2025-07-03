<?php

// Create a file
file_put_contents("file.txt", "Some text here");

// Delete the file 
unlink("./file.txt");