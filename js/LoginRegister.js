function nextpage() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
    const header = document.querySelector("header");
    const section = document.querySelector("main");
    const log = document.querySelector("#login");
    const body=document.querySelector('body');
    body.classList.add("over");
    header.classList.add("bluer");
    section.classList.add("bluer");
    log.classList.add("L_data");
    log.classList.add("L_input");
    var ico=document.querySelector('.icon');
    ico.addEventListener('click',()=>{
      body.classList.remove("over");
      header.classList.remove("bluer");
      section.classList.remove("bluer");
      log.classList.remove("L_data");
      log.classList.remove("L_input");
    });
  }
  function nextRpage() {
    const log = document.querySelector("#login");
    log.classList.remove("L_data");
    log.classList.remove("L_input");
    window.scrollTo({ top: 0, behavior: 'smooth' }); // action to scroll top in smooth motion
    const header = document.querySelector("header");
    const section = document.querySelector("main");
    const res = document.querySelector("#Register");
    const body = document.querySelector('body');
    body.classList.add("over");
    header.classList.add("bluer");
    section.classList.add("bluer");
    res.classList.add("R_data");
    res.classList.add("R_input");
    const reBtn = document.querySelector('.re');
    reBtn.addEventListener('click', () => {
      document.location.href = 'userHeader.html';
    });
    var ico=document.querySelector('.ico');
    ico.addEventListener('click',()=>{
      console.log('hehehehe');
      body.classList.remove("over");
      header.classList.remove("bluer");
      section.classList.remove("bluer");
      res.classList.remove("R_data");
      res.classList.remove("R_input");
    });
    
  }
 
  // body.classList.remove("over");
  //   header.classList.remove("bluer");
  //   section.classList.remove("bluer");
  //     res.classList.remove("R_data");
  //   res.classList.remove("R_input");
  
  