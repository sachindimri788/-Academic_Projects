const mongoose=require('mongoose');


const db='mongodb+srv://sachin:sachin@cluster0.tfllmby.mongodb.net/sachindimri?retryWrites=true&w=majority';

mongoose.connect(db).then(()=> {
    console.log(`connect`);
}).catch((err)=>console.log(err));
