var input = document.querySelector(".input_text");
var main = document.querySelector("#name");
var temp = document.querySelector(".temp");
var desc = document.querySelector(".desc");
var clouds = document.querySelector(".clouds");
var button = document.querySelector(".submit");
var card = document.querySelector(".card");

button.addEventListener("click", function (name) {
  fetch(
    "https://api.openweathermap.org/data/2.5/weather?q=" +
      input.value +
      "&appid=12271d81cef142c1ffa99be7442cdef0"
  )
    .then((response) => response.json())
    .then((data) => {
      var tempValue = data["main"]["temp"];
      var nameValue = data["name"];
      var descValue = data["weather"][0]["description"];

      main.innerHTML = nameValue;
      desc.innerHTML = "Desc - " + descValue;
      temp.innerHTML = "Temp - " + tempValue + " K";
      if (descValue == "overcast clouds") {
        card.style.background = "url('overcast.webp')";
      }
      else if (descValue == "clear sky") {
        card.style.background = "url('clear.jpeg')";
      }
      else if (descValue == "scattered clouds") {
        card.style.background = "url('scattered.jpeg')";
        card.style.color = "black";
      }
      else if (descValue == "few clouds") {
        card.style.background = "url('few.jpeg')";
      }
      else if (descValue == "haze") {
        card.style.background = "url('haze.webp')";
      }
      else if (descValue == "broken clouds") {
        card.style.background = "url('broken.jpeg')";
      }
    

      input.value = "";
    })

    .catch((err) => alert("Wrong city name!"));
});
