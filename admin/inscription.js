//register

confirmer.onclick = function () {
  let start = Date.now();

  let timer = setInterval(function () {
    let timePassed = Date.now() - start;

    voiture.style.left = timePassed / 7 + 'px';

    if (timePassed > 1900) clearInterval(timer);

  }, 20);
}


