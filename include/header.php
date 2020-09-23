<!DOCTYPE html>

<html lang="en">



<head><meta charset="gb18030">

    

    <title>Online Form | Home</title>
    <?php include_once 'title_script.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    include_once 'css.php';
    ?>




    <style>

        .over{

            background-color: rgba(100, 65, 165, 0.85) !important;

            min-height: 100%;

            background-repeat: no-repeat;

            background-size: cover;

            background-position: relative;

        }

        .input-group .input-group-icon {
            margin:0;box-sizing:border-box;
        }
        .input-group .input-group-area input {
            margin:0;box-sizing:border-box;
        }
        /* html,body{height:100%;font:14px/1.4 sans-serif;}
            input, textarea{font:14px/1.4 sans-serif;} */

        .input-group{
            display: table;
            border-collapse: collapse;
            width:100%;
        }
        .input-group > div{
            display: table-cell;
            /* border: 1px solid #ddd; */
            vertical-align: middle;  /* needed for Safari */
        }
        .input-group-icon{
            background:#eee;
            color: #777;
            padding: 0 12px;
            width:20%;
        }
        .input-group-area{
            width:100%;
        }
        .input-group input{
            display: block;
            width: 100%;
            padding: 8px;
            box-sizing:border-box;
        }

        #msform .action-button1 {
            width: 200px;
            background: #ee0979;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 25px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button1:hover,
        #msform .action-button1:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
        }
        #msform .action-button-previous {
            width: 100px;
            background: rgb(174, 174, 184);
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 25px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
    }

    #msform .action-button-previous:hover, #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
    }

        @media only screen and (max-width: 600px) {
            /* img { */
                /* max-width: 100%;
                height: 50%; */
                /* display: none;
            } */
            .copy{
                /* text-align: center; */
                font-size: 10px;
            }
        }



    </style>


</head>
