let start = new Date().getTime();

function getRandomColor() {
  const letters = '0123456789ABCDEF';
  let color = '#';
  for (let i = 0; i < 6; i += 1) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

function makeShapeAppear() {
  const top = Math.random() * 400;
  const left = Math.random() * 400;
  const width = Math.random() * 200 + 100;

  if (Math.random() > 0.5) {
    document.getElementById('form').style.borderRadius = '50%';
  } else {
    document.getElementById('form').style.borderRadius = '0';
  }

  document.getElementById('form').style.backgroundColor = getRandomColor();
  document.getElementById('form').style.top = `${top}px`;
  document.getElementById('form').style.left = `${left}px`;
  document.getElementById('form').style.width = `${width}px`;
  document.getElementById('form').style.height = `${width}px`;

  document.getElementById('form').style.display = 'block';

  start = new Date().getTime();
}

function appearAfterDelay() {
  setTimeout(makeShapeAppear, Math.random() * 2000);
}

appearAfterDelay();

document.getElementById('form').onclick = function() {
  document.getElementById('form').style.display = 'none';

  const end = new Date().getTime();

  const dauer = (end - start) / 1000;

  document.getElementById('dauer').innerHTML = `${dauer}s`;

  const best = dauer;
  if (best >= dauer) {
    document.getElementById('best').innerHTML = `${dauer}s`;
  } else {
    document.getElementById('best').innerHTML = `${best}s`;
  }
  
  appearAfterDelay();
};

