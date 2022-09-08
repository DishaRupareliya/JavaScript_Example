var mysql = require('mysql');
var con = mysql.createConnection({
host: "localhost",
user: "root",
password: "root",
database: "project"
});
con.connect(function(err) {
if (err) throw err;
console.log("Connected!");
var sql = "INSERT INTO login (username,password) VALUES ?";
var values = [['khyati','1234'],['jay',2345],['Dev','dev']];
con.query(sql, [values], function (err, result) {
if (err) throw err;
console.log("Number of records inserted: " + result.affectedRows);
});
});