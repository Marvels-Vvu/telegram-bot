<?php
  $page = $_SERVER['localhost/marvel/deploymessages.php'];
$sec = "45";
     //accepting variables from the text box on our site
  //this feature is also used for manually sending messages to the intended user 

 //saving the bot token into the variable $botToken
$botToken ="259090657:AAGOYlHZPEM74kpSKNnmupblxVdIyIQuKK4";
//instantiating the url for telegram
$website = "https://api.telegram.org/bot".$botToken;


$update = file_get_contents($website."/getupdates");
$update = json_decode($update, TRUE);
//getting the last array locaton of the recieved message
$current_update =end($update["result"]);
//getting the chat id of the user
$chatId = $current_update["message"]["chat"]["id"]; 
//recieving input message from the user and saving it in a variable
$newmessage=$current_update["message"]["text"];

$teleuser=$current_update["message"]["from"]["first_name"];  
//file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$messageme); 
  
   //checking the text recieved from the user and giving it an associated message
   switch($newmessage) {
        case "/start":
            $botMessage="Bot Enabled";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
        case "/end":
            $botMessage="Good bye";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
           case "hi":
           $botMessage="hello there!";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
        case "hello":
            $botMessage="hi";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
         case "Hello":
            $botMessage="hi";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
case "bye":
            $botMessage="nice chating you";
            file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
case "how old are you?":
            $botMessage="just a year old";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
        break;
case "/help":
             $botMessage="check the symbol / near your text box";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
        case "/go":
            $botMessage="hello ";
            file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
            
        ///////////////////////////////////////////////////////////////////
            case "Who are you?":
            $botMessage="I am a friendly interactive Bot :)";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "who are you?":
            $botMessage="I am a friendly interactive Bot :)";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "WHO ARE YOU?":
            $botMessage="I am a friendly interactive Bot :)";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
////////////////////////////////////////////////////////////////////////////////////
            case "how are you?"  :
            $botMessage="Great!";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "How are you?"  :
            $botMessage="Great!";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "HOW ARE YOU?"  :
            $botMessage="Great!";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
//////////////////////////////////////////////////////////////////////////////////////
            case "What is your name?":
            $botMessage="InfoPacBot";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

             case "what is your name?":
            $botMessage="InfoPacBot";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

             case "WHAT IS YOUR NAME?":
            $botMessage="InfoPacBot";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
///////////////////////////////////////////////////////////////////////////////////
            case "Where are you from?":
            $botMessage="Valley View University";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

              case "where are you from?":
            $botMessage="Valley View University";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "WHERE ARE YOU FROM?":
            $botMessage="Valley View University";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

//////////////////////////////////////////////////////////////////////////////
            case "What is the name of your father?" :
            $botMessage="Oladapo Nettey";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "what is the name of your father?" :
            $botMessage="Oladapo Nettey";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "WHAT IS THE NAME OF YOUR FATHER?" :
            $botMessage="Oladapo Nettey";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
//////////////////////////////////////////////////////////////////////////////
            case "What's up?":
            $botMessage="eerrm, nothing much...";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
            
            case "what's up?":
            $botMessage="eerrm, nothing much...";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
            
            case "WHAT'S UP?":
            $botMessage="eerrm, nothing much...";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
  ////////////////////////////////////////////////////////////////////////////////          
            case "How old are you?":
            $botMessage="Just a few months old";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
            
            case "how old are you?":
            $botMessage="Just a few months old";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "HOW OLD ARE YOU?":
            $botMessage="Just a few months old";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
//////////////////////////////////////////////////////////////////////////////////
            case "Can we be friends?":
            $botMessage="Sure, I'd love that ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
            
            case "can we be friends?":
            $botMessage="Sure, I'd love that ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;

            case "CAN WE BE FRIENDS?":
            $botMessage="Sure, I'd love that ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
  ////////////////////////////////////////////////////////////////////////////////////////          
            case "Can we chat?":
            $botMessage="Definitely";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;

             case "can we chat?":
            $botMessage="Definitely";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
            
             case "CAN WE CHAT?":
            $botMessage="Definitely";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
  ///////////////////////////////////////////////////////////////////////////////////////////          
            case "what is our group name":
            $botMessage="marvel";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
            
            case "which day do i have distributed classes":
            $botMessage="every tuesdays and thursday";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "what is the name of the lecturer":
            $botMessage="mr joseph abandoh sam";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
   /////////////////////////////////////////////////////////////////////////////////         
            case "do you like valley view?":
            $botMessage="hmmmm.... That is a difficult question";
            $time=date("h:i:sa");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$time);
            break;
            
             case "DO YOU LIKE VALLEY VIEW?":
            $botMessage="hmmmm.... That is a difficult question ";
            $time=date("h:i:sa");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$time);
            break;

             case "Do you like Valley View?":
            $botMessage="hmmmm.... That is a difficult question ";
            $time=date("h:i:sa");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$time);
            break;
////////////////////////////////////////////////////////////////////////////////////
            case "/codeAliance":
            $botMessage="Code_Alliance is a Tech company that seeks to solve social problems via digitization";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
 ////////////////////////////////////////////////////////////////////////////////////         
            case "Good morning":
            $botMessage="Good morning";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;

            case "good morning":
            $botMessage="Good morning ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;

            case "GOOD MORNING":
            $botMessage="Good morning";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
/////////////////////////////////////////////////////////////////////////////////////////

            case "Hi":
            $botMessage="hello ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
             
             case "hi":
            $botMessage="hello ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;

            case "HI":
            $botMessage="hello ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;

////////////////////////////////////////////////////////////////////////////////////
            case "GOOD AFTERNOON":
            $botMessage="Good afternoon";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;

            case "good afternoon":
            $botMessage="Good morning";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;

            case "Good afternoon":
            $botMessage="Good afternoon";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
///////////////////////////////////////////////////////////////////////////////////////
             default:
           $botMessage="sorry please I don't have knowledge about it yet";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
      
    } 
    
   
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marvel</title>
   <link rel="stylesheet" type="text/css" href="formValidators/vendor/bootstrap/css/bootstrap-theme.css"
/>
    <link rel="stylesheet" type="text/css" href="formValidators/vendor/bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" href="formValidators/vendor/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" href="formValidators/vendor/jquery/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="api.css" type="text/css">
</head>
<body>
    <header>
     <nav id="nbar" class="navbar navbar-defaullt navbar-inverse navbar-fixed-top" role="navigation">
    
    <div class="container">
    <div class="navbar-header">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Marvel's</a>
    </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><span  class="glyphicon glyphicon-home">Home </span></a></li>
            <li class="active"><a href="#"> <span class="glyphicon glyphicon-phone">Contact Us</span></a></li> 
            <li class="dropdown" ><a href="#" data-toggle="dropdown" class="dropdown-toggle"> <span  class="glyphicon glyphicon-user">AboutUs</span></a>
            <ul class="dropdown-menu" >
                <li > <a href="#">Gallery</a> </li>
                <li > <a href="#">Gallery</a> </li> 
                </ul> 
            </li> 
            </ul>
    </div>
    </nav>  
    </div>
    </div>
        </nav>
    </header>
        <div class="container" style="float:center;padding-top:200px;" >
        <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Send Message to Bot</h3>
  </div>
  <div class="panel-body" id="load_tweets">

     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('record_count.php').fadeIn("slow");
}, 10000); // refresh every 10000 milliseconds

</script>
      <form method="post"  action="#">
          <div class="form-group">
              <input class="form-control" name="message" type="text">
              
            <button class="btn btn-success" name="submit" type="submit" ><span class="glyphicon glyphicon-envelope"></span>send</button>
              </div>
          
          </form>
      
      
  </div>
</div>
</div>
</body>  

</html>
    