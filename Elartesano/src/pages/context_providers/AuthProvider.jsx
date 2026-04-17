import { createContext, useState, useContext, useEffect } from "react";
import { useNavigate } from "react-router-dom";
/* 
import { VALIDATE_TOKEN_ENDPOINT } from "../../config"; */

const AuthContext = createContext();

export function AuthProvider({ children }) {

    const tokenLS = localStorage.getItem("authToken");
    const [token, setToken] = useState(tokenLS || null);
    const [isAuthenticated, setIsAuthenticated] = useState(false);
    const [isAuthLoading, setIsAuthLoading] = useState(true);
    const navigate = useNavigate();

    const login = (token) => {
        setIsAuthenticated(true); 
        setToken(token);
        console.log("token", token);
        localStorage.setItem("authToken", token); 
        navigate("/"); 
    };

    const logout = () => {
        setIsAuthenticated(false);
        setToken(null);
        localStorage.removeItem("authToken");  
        console.log("borrando carrito")
     
    };



    useEffect(() => {
        const validateToken = async () => {
       
            const storedToken = localStorage.getItem("authToken");

            if (!storedToken) {
                setIsAuthenticated(false);
                setIsAuthLoading(false);
                return;
            }
                setToken(storedToken);
                setIsAuthenticated(true);
/*             setIsAuthLoading(true);

            try {
                const response = await fetch(VALIDATE_TOKEN_ENDPOINT, {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                        Authorization: `Bearer ${storedToken}`,
                    },
                });

                if (!response.ok) {
                    throw new Error("Token invalid or expired");
                }

                const data = await response.json();
                const backendToken = data?.token;

                if (!backendToken) {
                    throw new Error("Invalid validation response");
                }

                setToken(storedToken);
                setIsAuthenticated(true);
            } catch (error) {
                console.error("Sesion invalida o caducada:", error);
                logout();
            } finally {
                setIsAuthLoading(false);
            } */
        };

        validateToken();
    }, []); 

    return (
        <AuthContext.Provider value={{ isAuthenticated, login, logout, token, isAuthLoading }}>
            {children}
        </AuthContext.Provider>
    );
}



export const useAuth = () => {
    return useContext(AuthContext);
};