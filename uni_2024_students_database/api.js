import fetch from 'node-fetch';

let API = 'http://localhost:8000';

export async function getdata() {
	const res = await fetch(API);
	const data = await res.json();
	try {
		console.log(data);
		return data;
	} catch (e) {
		console.log('Some error');
		console.log(e);
		proccess.exit(0);
	}
}

getdata().then(result => {
	console.log(data);
}).catch(error => {
	console.log('no va');
});
