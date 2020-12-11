const express = require('express')
const path = require('path')
const PORT = 8000;
const app  = express();
const bodyParser = require('body-parser');

//EJS
app.set("view engine" ,"ejs");
app.set('views', path.join(__dirname, "views"));
app.use(express.static(path.join(__dirname, 'public')));


//Bodyparser
app.use(bodyParser.urlencoded({extended: true}))
app.use(bodyParser.json())

var users = [];
var error = [];
app.get('/', (req, res)=>{
    res.render('registration', {
        data: []
    })
})

app.get('/login',(req, res)=>{
    res.render('login', {
        error : ""
    })
})

app.get('/register',(req, res)=>{
    res.render('registration',{
        data : []
    })
})


let registrationValidate = (request, response, next) => {

    if(request.body.firstname.length <=2 || request.body.firstname.length>25){
        error.push("Your First name must be at least 2 characters and does not exceed to 25 characters!")
    }
    if(request.body.lastname.length <=2 || request.body.lastname.length >25){
        error.push("Your Last name must be at least 2 characters and does not exceed to 25 characters!")
    }
    if(request.body.email != request.body.confirmEmail){
        error.push("Email doesn't match!")
    }if(request.body.password != request.body.confirmPassword){
        error.push("Password doesn't match!")
    }
    if(error.length>0){
       return response.render("registration",{
            data: error
        })     
    }

    next()
}

app.post('/create', registrationValidate, (req, res)=>{
    users.push(req.body)
    console.log(users)
    res.render('login', {
        error: "",
        title: "Log In Form"
    })
})

let authenticate = (request, response,next) => {
    const findOne = users.find((user)=>{
        return user.email === request.body.email && user.password === request.body.password     
    })
    if(findOne){
        return next();
    }
    return response.render('login',{
        error: "Account does not exist!"
        
    })
}


app.post('/homepage',authenticate, (req, res)=>{
    try{
        res.render('output', {
                data: users,
                title: "Home Page"
            })
    }catch(e){
        console.log(e)
    }

})


app.listen( PORT, () =>{
    console.log(`Server started at port ${PORT}`);
})