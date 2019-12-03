//--------------------------------------------------------------
const $btnStart = document.getElementById("btnStart");
const $btnStop = document.getElementById("btnStop");
const $txtTemps = document.getElementById("txtTemps");
const $divPB_Int = document.getElementById("divPB_Int");

$btnStart.addEventListener("click", start);
$btnStop.addEventListener("click", stop);

//--------------------------------------------------------------

let timer;
let tpsInit = 0;
let tpsAct;

initPB();
//--------------------------------------------------------------

function start() {
	if ($txtTemps.value < 1) return;

	tpsInit = $txtTemps.value;
	tpsAct = tpsInit;

	$txtTemps.disabled = true;
	$btnStart.disabled = true;
	$btnStop.disabled = false;

	initPB();

	timer = setInterval(majProgressBar, 1000);
}

function stop() {
	clearInterval(timer);
	timer = null;

	$txtTemps.disabled = false;
	$btnStart.disabled = false;
	$btnStop.disabled = true;
}

function majProgressBar() {
	tpsAct--;
	$txtTemps.value = tpsAct;
	affPB();

	if (tpsAct == 0) stop();
}

function affPB() {
	let pc = (tpsAct / tpsInit) * 100;

	if (pc < 30) $divPB_Int.style.backgroundColor = "red";
	$divPB_Int.style.width = pc + "%";
}

function initPB() {
	$divPB_Int.style.height = "100%";
	$divPB_Int.style.width = "100%";
	$divPB_Int.style.backgroundColor = "green";
}
