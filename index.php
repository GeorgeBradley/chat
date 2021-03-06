<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300;1,400&family=Roboto:wght@300;500&display=swap"
        rel="stylesheet">
    <title>Chaterrific</title>
</head>

<body>
    <div class="grid-container">
        <nav class="dashboard-nav">

            <div>
                <div class="profile-pic-container">
                    <img src="images/196379087_4112286052193775_2486558998445808917_n.jpg" alt="">
                </div>
             
            </div>
         
            <ul class="dashboard-items">

                <li><a href=""><i class="fas fa-plus"></i>New</a></li>
                <li><a href=""><i class="fas fa-users"></i>Users</a></li>
                <li><a href=""><i class="fas fa-sms"></i>Chats</a></li>
                <li><a href=""><i class="fas fa-user"></i>Profile</a></li>
                <li><a href=""><i class="fas fa-download"></i>Install</a></li>

            </ul>
            <a href=""><i class="fas fa-cogs"></i>Settings</a>

        </nav>

        <aside class="chats">
        
            <header class="chats-header">
               <h1>Chats</h1>       
            </header>
          
            <div class="all-chats">
                <div class="chat-box">
                    <div class="chat-box-info">
                        <h2 class="chat-title">Uber Cool Gang</h2>
                        <p>This chat is for uber cool people only</p>
    
                    </div>
                </div>
                <div class="chat-box">


                    <div class="chat-box-img-container active">
                        <img src="images/jackKimmins.png" alt="">
                    </div>
    
                    <div class="chat-box-info">
                        <h2 class="chat-title">Jack Kimmins</h2>
                        <p>Your private conversation with Jack.</p>
    
                    </div>
                </div>
                <div class="chat-box">
    
                    <div class="chat-box-img-container idle">
                        <img src="images/oli.png" alt="">
                    </div>
    
                    <div class="chat-box-info">
                        <h2 class="chat-title">Oliver Stahmer</h2>
                        <p>Your private conversation with Oliver.</p>
    
                    </div>
                </div>
                <div class="chat-box">
                    <div class="chat-box-img-container offline">
                        <img src="images/lee.png" alt="">
                    </div>
    
                    <div class="chat-box-info">
                        <h2 class="chat-title">Lee Hicks</h2>
                        <p>Your private conversation with Lee.</p>
    
                    </div>
                </div>
                <div class="chat-box">
                    <div class="chat-box-img-container busy">
                        <img src="images/jose.png" alt="">
                    </div>
    
                    <div class="chat-box-info">
                        <h2 class="chat-title">Jose Showtime</h2>
                        <p>Your private conversation with Lee.</p>
    
                    </div>
                </div>
          
           
            </div>
          
          
        </aside>

        <aside class="messages">

            <nav class="messages-nav">
                <i class="fas fa-sms message-icon messages-nav-icon"></i>
                <div class="messages-nav-info">

                    <h1>Uber Cool Gang</h1>
                    <p>This chat is for uber cool people only!</p>
                </div>

                <ul class="messages-nav-items">
                    <li><a href=""><i class="fas fa-camera"></i></a></li>
                    <li><a href=""><i class="fas fa-search"></i></a></li>
                    <li><a href=""><i class="fas fa-user-friends"></i></a></li>
                    <li><a href=""><i class="fas fa-info-circle"></i></a></li>
                </ul>


                <a class="menu-toggle" href="">
                    <span></span>
                    <span></span>
                    <span></span>

                </a>


            </nav>

            <div class="all-messages">

               
               
                <div class="message right-message">
                    <div class="profile-pic-sender busy">
                        <img src="images/jose.png" alt="">
                    </div>
                    <div class="react">
                         ????
                      ????
                       ????
                       ????
                        ????
                    </div>
                    <div class="message message-info">
                        <p class="name-of-sender">Jose Showtime</p>
                        <p class="time-sent">1:45 PM</p>
                        <i class="reaction"></i>
                    </div>
                    <p class="">Wassup lads, we doin' good? </p>
                </div>
                
          
                <div class="message left-message">
                    <div class="message-info">
                   
                        <p class="time-sent">1:59 PM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>I'm going to a wedding tomorrow.</p>
                </div>
           




                <div class="message right-message">
                    
                    <div class="profile-pic-sender active">
                        <img src="images/jackKimmins.png" alt="">
                        

                    </div>
                    <div class="message-info">
                        <p class="name-of-sender">Jack Kimmins</p>
                        <p class="time-sent">1:45 PM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>Not much, why do you ask?</p>
                </div>

                <div class="message left-message">
                    <div class="message-info">
                   
                        <p class="time-sent">1:32 AM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>What are you doing tomorrow?</p>
                </div>
          
 
                <div class="message right-message">
                    <div class="profile-pic-sender active">
                        <img src="images/jackKimmins.png" alt="">

                    </div>
                    <div class="message-info">
                        <p class="name-of-sender">Jack Kimmins</p>
                        <p class="time-sent">1:30 PM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>I shouldn't speculate, you're right. </p>
                </div>
                <div class="message left-message">
                    <div class="message-info">
                   
                        <p class="time-sent">1:23 AM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>That's a strange thing to say, what makes you think he was faking it?</p>
                </div>
            
                <div class="message right-message">
                    <div class="profile-pic-sender active">
                        <img src="images/jackKimmins.png" alt="">

                    </div>
                    <div class="message-info">
                        <p class="name-of-sender">Jack Kimmins</p>
                        <p class="time-sent">1:21 PM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>Do you really think he likes it as much as he says he does? Or do you think he's putting on an
                        act?</p>
                </div>

                <div class="message left-message">
                    <div class="message-info">
                   
                        <p class="time-sent">1:04 PM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>He certainly does. You can hear how much he likes the town.</p>
                </div>
     
                <div class="message right-message">
                    <div class="profile-pic-sender active">
                        <img src="images/jackKimmins.png" alt="">

                    </div>
                    <div class="message-info">
                        <p class="name-of-sender">Jack Kimmins</p>
                        <p class="time-sent">1:02 PM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>I did, it was an absolutely amazing interview. George surely loves Weston, doesn't he?</p>
                </div>

                <div class="message left-message">
                    <div class="message-info">
                   
                        <p class="time-sent">12:51 AM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>I'd like to talk about George who recently appeared on the radio, did you hear?.</p>
                </div>>
        
                <div class="message right-message">
                    <div class="profile-pic-sender active">
                        <img src="images/jackKimmins.png" alt="">

                    </div>
                    <div class="message-info">
                        <p class="name-of-sender">Jack Kimmins</p>
                        <p class="time-sent">12:50 PM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>Haha, good idea. What do you want to talk about then?</p>
                </div>
    
                <div class="message left-message">
                    <div class="message-info">
                   
                        <p class="time-sent">12:45 AM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>Alas! you're right. Oh well, we're just going to have to accept the fact Dcotor Who is not as
                        good as it used to be. Anyway, let's change subject.</p>
                </div>
         

                <div class="message right-message">
                    <div class="profile-pic-sender active">
                        <img src="images/jackKimmins.png" alt="">

                    </div>
                    <div class="message-info">
                        <p class="name-of-sender">Jack Kimmins</p>
                        <p class="time-sent">12:43 PM</p>
                        <i class="reaction"></i>
                    </div>
                    <p>Those were the days. I don't think Doctor Who will ever be as good as the Christopher Eccleston
                        abd David Tennant days. </p>
                </div>
                <div class="message left-message">
                    <div class="message-info">
                   
                        <p class="time-sent">12:34 PM</p>
                    </div>
                    <p>I honestly can't wait for Russel T Davis to return as script writer again. </p>
                </div>
                <div class="message right-message">
                    <div class="profile-pic-sender active">
                        <img src="images/jackKimmins.png" alt="">

                    </div>
                    <div class="message-info">
                        
                        <p class="name-of-sender">Jack Kimmins</p>
                        <p class="time-sent">12:31 PM</p>
                        <i class="reaction">????4</i>
                    </div>
                    <p>Haha, that's so true actually. In my opinion there's way too much exposition.</p>
                </div>
                <div class="message left-message">
                    <div class="message-info">
                     
                        <p class="time-sent">12:25 PM</p>
                        <i class="reaction">????2</i>
                    </div>
                    <p>It's like listening to an audiobook.</p>
                </div>
                <div class="message right-message">
                    <div class="profile-pic-sender active">
                        <img src="images/jackKimmins.png" alt="">

                    </div>
                    <div class="message-info">
                        <p class="name-of-sender">Jack Kimmins</p>
                        <p class="time-sent">12:20 PM</p>
                    </div>
                    <p>Eek, how is it?</p>
                </div>

                <div class="message left-message">
                    <div class="message-info">
                   
                        <p class="time-sent">11:22 AM</p>
                    </div>
                    <p>I'm fine thank you. Just watching the new Doctor Who.</p>
                </div>
                <div class="message right-message">
                    <div class="profile-pic-sender active">
                        <img src="images/jackKimmins.png" alt="">

                    </div>
                    <div class="message-info">
                        
                        <p class="name-of-sender">Jack Kimmins</p>
                        <p class="time-sent">11:21 AM</p>
                        <i class="reaction">????2</i>
                    </div>
                    <p>Hey, how are you doing?</p>
                </div>

            
            </div>
            <footer class="footer">
                <div class="send-message">
                    <input type="text" placeholder="Type your message...">
                    <a href=""><i class="far fa-paper-plane"></i></a>

                </div>
            </footer>
        </aside>

    </div>

</body>

</html>