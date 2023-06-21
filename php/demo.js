var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost:3309",
  user: "root",
  password: "saravana"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});