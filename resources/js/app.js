require('./bootstrap');
var Turbolinks = require("turbolinks")
Turbolinks.start()

function goBack()
{
    window.history.go(-2);
}
