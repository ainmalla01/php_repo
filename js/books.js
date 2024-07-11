function RoomsImage(url) {
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            const roomImg = document.getElementById('roomimg');
            if (roomImg) {
                roomImg.src = data;
                console.log(data);
            } else {
                console.error('Element with ID "roomimg" not found');
            }
        })
        .catch(error => {
            console.error('Error fetching image:', error);
        });
}
