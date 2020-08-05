<?php
    echo "\n\n Welcome to Library \n\n";
do{
    echo "\n 1. Add \n";
    echo " 2. Update \n";
    echo " 3. Delete \n";
    echo " 4. Find by ISBN \n";
    echo " 5. Show all books \n";
    echo " 6. Show books by year \n";
    echo " 7. Show books by author \n";
    echo " 0. EXIT\n";
    echo " Select your option ";
    $operation = readline();
    $acceptedValues = ["1", "2", "3", "4", "5", "6", "7", "0"];
    while (!in_array($operation, $acceptedValues)) {
        echo "Incorrect value input:\n Please input again ";
        $operation = readline();
    }
    switch ($operation){
        case "0": exit("\n\n Thank you for using LIBRARY \n\n");
        case "1" :
            require_once ("Book/Add.php");
            $addBook = new AddBook;
            echo $addBook ->greet();
            break;

        case "2":
            require_once ("Book/Update.php");
            $updateBook = new UpdateBook;
            echo $updateBook -> greet();
            break;
        case "3":
            require_once ("Book/Delete.php");
            $deleteBook = new DeleteBook;
            echo $deleteBook -> greet();
            break;
        case "4":
            require_once ("Book/Find.php");
            $findBook = new Find_by_ISBN;
            echo $findBook -> greet();
            break;
        case "5":
            require_once ("Book/ShowAll.php");
            $show_all_books = new ShowAll;
            echo $show_all_books ->Show_All_Books();
            break;
        case "6":
            $option = "6";
            require_once ("Book/ShowBy.php");
            $showBook_by_Year = new ShowBy($option);
            break;
        case "7":
            $option = "7";
            require_once ("Book/ShowBy.php");
            $showBook_by_Year = new ShowBy($option);
            break;

    }


} while ($operation != "0");