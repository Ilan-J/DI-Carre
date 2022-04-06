function showResponsiveMenu() {
    var menu = document.getElementById("topnav_responsive_menu");
    var icon = document.getElementById("topnav_hamburger_icon");
    var root = document.getElementById("root");
    if (menu.className === "") {
      menu.className = "open";
      icon.className = "open";
      root.style.overflowY = "hidden";
    } else {
      menu.className = "";                    
      icon.className = "";
      root.style.overflowY = "";
    }
  }

  
let bombRow;
let bombColumn;
let tries;
let ready;

function doClick(id) {
  
  if (!ready) {
    return;
  }
  
  console.log('clicked on #'+id);
  // id row-column
  // let bomb = 'tile'+bombRow+'-'+bombColumn;
  let bomb = `tile-${bombRow}-${bombColumn}`;

  tries++; 
  
  
  console.log(`The bomb is in ${bomb}`);

  if ( bomb == id) {
    console.log('Found the bomb!'); 
    ready = false;
    document.querySelector('#'+id).classList.add('bomb');
    document.querySelector('#tries').innerHTML = `You have found the bomb in ${tries} tries`;
    setTimeout(reset, 2000);
  } else {
    console.log('Search again...');
    document.querySelector('#'+id).classList.add('empty');
    document.querySelector('#tries').innerHTML = `You have done ${tries} tries`;
  }
}

function reset() {
  ready = true;
  bombRow = Math.floor(3*Math.random()); // random row 0,1,2,3
  bombColumn = Math.floor(3*Math.random()); // random column 0,1,2,3
  tries = 0;

  console.log('The bomb is in tile #'+bombRow+'-'+bombColumn);
  
  document.querySelector('#tries').innerHTML='Find the bomb, quickly!';
  for (let row=0; row < 3; row++) {
    for (let col=0; col < 3; col++) {
      let tile = document.querySelector(`#tile-${row}-${col}`);
      tile.classList.remove('bomb');
      tile.classList.remove('empty');
    }
  }
}

reset();

/* ----------------------------- FENETRE MODALE LOTERIE--------------------------------- */

function chargeModale(){
  document.querySelector('.modale').style.display = 'initial';
}

function closeModale(){
  document.querySelector('.modale').style.display = 'none';
}

/* ----------------------------- FENETRE MODALE DEMINEUR --------------------------------- */

function chargeModaleDemineur(){
  document.querySelector('.modale-demineur').style.display = 'initial';
}

function closeModaleDemineur(){
  document.querySelector('.modale-demineur').style.display = 'none';
}
