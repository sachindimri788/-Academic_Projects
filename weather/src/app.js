const express = require('express');
const app=express();
const port= process.env.PORT || 4500;


app.set('view engine','ejs');

//public static path for css and js 
const path=require('path');
const static_path=path.join(__dirname,"./views/template");
app.use(express.static(static_path));


app.get("/",(req,res)=>{
    res.render("index")
})

app.get("/about",(req,res)=>{
    res.render("about");
})

app.get("/weather",(req,res)=>{
    res.render("weather");
})

app.get("*",(req,res)=>{
    res.render("404");
})



app.listen(port, ()=>{
    console.log(`listening to the port at ${port}`) //BACK TICK BELOW TAB DOUBLEQUATES" " ARE USED IN V5 BUT WE USE BACK TICK IN V6 BECAUSE IN BACKTICK WE DON'T WANT ANY CONCATINATION SIGN LIKE +
})

