const express = require('express');
const port=process.env.PORT || 5000;
const app=express();

//for enable the path helps to select the static
const path=require('path')


//to read the json (html form entries)
app.use(express.json());
app.use(express.urlencoded({extended:false}));

//conn page to connect with database
require("./db/conn");

//importing the schema for database
const Register=require("./models/formmodel")

//static files
const static_path=path.join(__dirname,"../templates/views"); // this is for static like css js images etc
app.use(express.static(static_path));


//ejs set
app.set('view engine','ejs');
const template_path=path.join(__dirname,"../templates/views"); // need if view and app.js are not in the same folder;
app.set('views',template_path);



app.get('/',(req,res)=>{
    res.render("login")
})

//login check
app.post('/',async (req,res)=>{
    try {
        const email=req.body.email;
        const pass=req.body.password;

        const useremail = await Register.findOne({email:email}); //or object structuring says if two same name then you can use one  ({email}) simple
        if(useremail.password===pass){
            res.status(201).render("index");
        }else{
            res.send("WRONG PASSWORD")
        }

    } catch (error) {
        res.status(400).send("invalid")
    }

})


app.get('/index',(req,res)=>{
    res.render("index");
})

app.get('/register',(req,res)=>
{
    res.render("register");
})


app.post('/register',async (req,res)=>
{
    try {
        const password =req.body.password;
        const cpassword =req.body.confirmpassword;

        if(password===cpassword){
              const registerEmployee = new Register({
                 firstname:req.body.firstname,
                 lastname:req.body.lastname,
                 email:req.body.email,
                 gender:req.body.gender,
                 phone:req.body.phone,
                 age:req.body.age,
                 password:req.body.password,
                 confirmpassword:req.body.confirmpassword
              })

              const registered = await registerEmployee.save();
              res.status(201).render("index");
        }
        else{
            res.send("password are not matching")
        }
    } catch (error) {
        res.status(400).send(error);
    }
    
})

app.listen(port,()=>{
    console.log(`server is runnning in a port ${port}`)
});