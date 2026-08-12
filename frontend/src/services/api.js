const API_URL = "http://localhost:8000/api";

export async function loginUser(email, password) {
    const response = await fetch(`${API_URL}/login`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
        },
        body: JSON.stringify({
            email,
            password
        })
    });

    const data = await response.json();
console.log(data)
    if (!response.ok) {
        throw new Error(data.message || "Erreur de connexion");
    }

    return data;
}
export async function logoutUser() {
    const token = localStorage.getItem("token");

    const response = await fetch(`${API_URL}/logout`, {
        method: "POST",
        headers: {
            "Accept": "application/json",
            "Authorization": `Bearer ${token}`,
        },
    });

    const data = await response.json();

    if (!response.ok) {
        throw new Error(data.message || "Erreur de déconnexion");
    }

    return data;
}



export const createEvent = async (eventData) => {
    const token = localStorage.getItem("token");

    const response = await fetch(`${API_URL}/events`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": `Bearer ${token}`,
        },
        body: JSON.stringify(eventData),
    });

    const data = await response.json();

    if (!response.ok) {
        throw {
            status: response.status,
            data: data,
        };
    }

    return data;
};
export const showEvent = async(eventData) =>{
    const response= await fetch(`${API_URL}/events`,{
        method : "GET",
        headers:{
             "Accept": "application/json",
        },
    });
    const data = await response.json();
    if(!response.ok){
        throw{
            status : response.status,
            data: data,
        }
    }
    return data;
}

export const getReservations=async(eventData) =>{
        const token = localStorage.getItem("token");

    const response=await fetch(`${API_URL}/reservations`,{
        method : "GET",
        headers:{
            "accept":"application/json",
            "Authorization": `Bearer ${token}`,
        }
    })
      const data = await response.json();
    if(!response.ok){
        throw{
            status : response.status,
            data: data,
        }
    }
    return data;
}