<?
include_once('botlang.php');
$bot=new botlang(); //creating a botlang object
$botcode=
"
?1[How are you doing] #pattern with variable 1
:1[I am fine] #response of variable 1
:1.1[I don't know] #alternate response for 1, chosen on random

?2[why don't you know?] 	
:2[I am down with fever]

?3[My name is $name]
:3[Well, hello there, $name]

?4[What is your name?]
:4[My name is WizBot]

?5[What are you called?]
:5>4

# : is selector for response, . selectors make it cascaded and random response is selected
# ? is selector for pattern
# $ is used for setting response and template variables
# * is used to mark the spot of mutation, BotLang will store a mirrored code and check if any mutation is needed
# > is used to direct the response to previous or some other pattern
"; 
//a botlang code, you can also run the code directly from file
//Now we will load the object so that it can be executed
$bot->load($botcode);
//or you can run a BotLang script directly
$bot->load("script://intro.botlang"); // script prefix is important for it to know that you are loading script

//EXECUTION

//Now that your bot is prepared with default behaviour you can run it on different templates 

$response=$bot->execute("Hi what is your name?");

?>
