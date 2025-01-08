
// send data to php :
function sendUpdatesToPhp() {

  fetch('http://localhost:8012/brief10/public/index.php/search', {
      method: 'GET',
      headers: {
          'Content-Type': 'application/json'
      },
      // body: JSON.stringify({ updates: updatesStatus })
    })
      .then((response) => response.json())
      .then((data) => {

        console.log(data);
        
        // if (data.success) {
        //       updatesStatus = [];
        //   } else {
        //       console.error('Error:', data.error);
        //   }
      })
      .catch((error) => {
          console.error('Fetch Error:', error);
      });
}





// on input :
// sendUpdatesToPhp(searchinput);






