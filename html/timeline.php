<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: Verdana, Tahoma, sans-serif;
    background-color: rgb(215, 204, 251); 

}
#header {
    height: 50px;
    width: 100%;
    margin: 0 auto;
    background-color: blue;

}

#header .content {
    display: flex;
    flex-direction: row;
    padding: 4px 10px;
    align-items: center;
    text-align: center;
    justify-content: center;
    
    
}

#header .content h1 {
    font-size: 2rem;
    color: white;
    padding: 0 10px;
    margin-right: 50px;
    font-size: 'Roboto';
}

#header .content .search-box {
    height: 25px;
    width: 350px;
    border-radius: 5px;
    border: none;
    padding: 0 10px;
    font-size: 15px;
    outline: none;
    
}

#profile_pic {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: solid 2px white;
}

#menu_buttons {
    display: inline-block;
    width: 100px;
    margin: 2px;
}


#friends_img {
    width: 75px;
    float: left;
    margin: 8px;
}

#friends_bar {
    min-height: 400px;
    margin-top: 20px;
    color: #405d9b;
    font-size: 17px;
    padding: 8px;
    text-align: center;
}

#friends {
    clear: both;
    font-size: 12px;
    font-weight: bold;
    color: #405d9b;
}

textarea {
    width: 100%;
    border: none;
    font-family: tahoma;
    font-size: 14px;
    height: 60px;
    outline: none;
}

#post_button {
    float: right;
    background-color: #405d9b;
    padding: 4px;
    border: none;
    color: white;
    font-size: 13px;
    border-radius: 2px;
    width: 50px;
}

#post_bar {
    background-color: white;
    margin-top: 20px;
    padding: 10px;
    display: flex;
    flex-direction: column;

}

#post_bar #post {
    padding: 4px;
    font-size: 13px;
    display: flex;
    margin-bottom: 20px;
} 
    
</style>

<body>
    <div id="header">
        <div class="content">
            <h1>Mybook</h1> &nbsp &nbsp &nbsp &nbsp  <input type="text" class="search-box" placeholder="input for search">
            <img src="" alt="img">
        </div>
    </div>

    <div style="width: 800px; margin: auto;  min-height: 400px;" >

     

        <!--Below cover Area-->
        <div style="display: flex;">

            <!--friends area-->
            <div style=" min-height: 400px; flex: 1;" >
            
                <div id="friends_bar">
                    <img id="profile_pic" src="/img/fine.jpg" alt="img"><br>
                    Adebowale Damilola

                </div>

            </div>

            <!--posts area-->
            <div style=" gray; min-height: 400px; flex: 2.5; padding: 20px;  padding-right: 0px;">
            
                <div style="border: solid thin #aaa; padding : 10px; background-color: white;"> 
                    <textarea name=""  cols="30" rows="10" placeholder="whats on your mind"></textarea>
                    <input type="submit" id="post_button" value="Post"><br><br> 
                    
                </div>
            <!--post-->
                <div id="post_bar">

                    <!--post 1-->
                    <div id="post">
                        <div>
                            <img src="/img/user_1.jpg" alt="img" style="width: 75px; margin:0px 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: #405d9b; ">Heybaby</div>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis porro
                             quia repudiandae fugiat doloremque alias, ipsum voluptatem molestiae voluptatum 
                             dolorum?
                             <br><br>
                            <a href="# " style="text-decoration: none;"> Like </a>. <a href="#" style="text-decoration: none;">comment </a> . <span style="color: #999;">April 23 2019</span> 
                        </div>

                    </div>
                    <hr style=" border: solid 1px #405d9b;">
                    <br>
                     <!--post 2-->
                     <div id="post">
                        <div>
                            <img src="/img/user_3.jpg" alt="img" style="width: 75px; margin:0px 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: #405d9b; ">lovers </div>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis porro
                             quia repudiandae fugiat doloremque alias, ipsum voluptatem molestiae voluptatum 
                             dolorum?
                             <br><br>
                            <a href="# " style="text-decoration: none;"> Like </a>. <a href="#" style="text-decoration: none;">comment </a> . <span style="color: #999;">April 23 2019</span> 
                        </div>

                    </div>



                </div>

            </div>

        </div>

    </div>




</body>
</html>  