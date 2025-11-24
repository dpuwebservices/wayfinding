const authObj = {
  client_id: "[your client id]",
  client_secret: "[your client secret]",
  grant_type: "client_credentials"
};

function displayClasses(json) {
  document.write("<table>\n");
  document.write("<tbody>\n");
  console.log(json);
  var events = json.events;
  for (let i = 0; i < events.length; i++) {
    var start_ts = Date.parse(events[i].start);
    var start_date = new Date(start_ts);
    var class_date = start_date.getDate();
    var time_start = start_date.getHours();
    console.log(events[i].id);
    document.write("<tr><th>"+events[i].title+"</th></tr>\n");
    document.write("<tr><td>"+class_date+": "+time_start+"</td></tr>\n");
  }
  document.write("</tbody>\n");
  document.write("</table>\n");
}

function getClasses(token) {
  fetch("https://libcal.depaul.edu/api/1.1/events?cal_id=2894&campus=1651&category=50862&days=4", {
    method: "GET",
    headers: {
      "Authorization": "Bearer "+token,
      "Content-Type": "application/json; charset=UTF-8"
    }
  })
  .then((response) => {
    if (!response.ok) {
      throw new Error('API response was not ok');
    }
    return response.json();
  })
  .then((json) => {
    if (json) {
      displayClasses(json);
    } else {
      throw new Error('API response format was unexpected.');
    }
  })
  .catch(error => console.error("Error processing response:", error));
}

fetch("https://libcal.depaul.edu/api/1.1/oauth/token", {
  method: "POST",
  body: JSON.stringify({
    client_id: "137",
    client_secret: "46c67a254ed49cb5332c12b6f4a6d2a5",
    grant_type: "client_credentials"
  }),
  headers: {
    "Content-Type": "application/json; charset=UTF-8"
  }
})
  .then((response) => {
    if (!response.ok) {
      throw new Error('API response was not ok');
    }
    return response.json();
  })
  .then((json) => {
    if (json && json.access_token) {
      const token = json.access_token;
      getClasses(token);
    } else {
      throw new Error('API response format was unexpected.');
    }
  })
  .catch(error => console.error("Error processing response:", error));

