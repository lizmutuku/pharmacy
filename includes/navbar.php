<style>
body {
  margin: 0;
  font-size: 20px;
  font-family: Arial, Helvetica, sans-serif;
   background-color:grey;
}

.header {
  background-color:#floralwhite;
  padding: 10px;
  text-align: center;
}

.navbar {
  overflow: hidden;
  background-color: #2c292f;
}

.navbar a {
  float: left;
  display: block;
  color: grey;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color:lavender;
  color: gray;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky +.content {
  padding-top: 60px;
}
</style>
