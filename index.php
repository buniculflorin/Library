<?php
require_once("Book/Add.php");
require_once("Book/Update.php");
require_once("Book/Delete.php");
require_once("Book/FindByISBN.php");
require_once("Book/ShowAll.php");
require_once("Book/ShowByYear.php");
require_once("Book/ShowByAuthor.php");

echo "\n\n Welcome to Library \n\n";
do
{
    echo "\n 1. Add \n";
    echo " 2. Update \n";
    echo " 3. Delete \n";
    echo " 4. Find by ISBN \n";
    echo " 5. Show all books \n";
    echo " 6. Show books by year \n";
    echo " 7. Show books by author \n";
    echo " 0. EXIT\n";
    echo " \nSelect your option ";
    $operation = readline();
    $acceptedValues = ["1", "2", "3", "4", "5", "6", "7", "0"];
    while (!in_array($operation, $acceptedValues)) {
        echo "Incorrect value input:\n Please input again ";
        $operation = readline();
    }
    switch ($operation){
        case "0": exit("\n\n Thank you for using LIBRARY \n\n");
        case "1" :
            $addBook=new AddBook;
            echo $addBook->greet();
            break;
        case "2":
            $updateBook=new UpdateBook;
            echo $updateBook->greet();
            break;
        case "3":
            $deleteBook=new DeleteBook;
            echo $deleteBook->greet();
            break;
        case "4":
            $findBook =new FindbyISBN;
            echo $findBook->greet();
            break;
        case "5":
            $show_all_books=new ShowAll;
            echo $show_all_books->greet();
            break;
        case "6":
            $show_book_by_year=new ShowByYear;
            echo $show_book_by_year->greet();
            break;
        case "7":
            $show_book_by_author=new ShowByAuthor;
            echo $show_book_by_author->greet();
            break;
    }
} while ($operation != "0");