import styles from "./Platos.module.css"
import { DishCard } from  "../../components/Dishcard/Dishcard"
import { GET_PLATOS_ENDPOINT} from '../../util/config';
import { useState, useEffect} from "react";

export function Platos() {
  const [platos, setPlatos] = useState([]);

  const dishes = [
    {
      name: "Pizza Artesanal",
      description: "Masa madre con mozzarella fresca",
      price: 12,
      image: "https://images.unsplash.com/photo-1604908176997-125f25cc6f3d"
    },
    {
      name: "Hamburguesa Gourmet",
      description: "Carne 100% ternera con cheddar",
      price: 10,
      image: "https://images.unsplash.com/photo-1565299624946-b28f40a0ae38"
    },
    {
      name: "Pasta Carbonara",
      description: "Receta italiana tradicional",
      price: 11,
      image: "https://images.unsplash.com/photo-1553621042-f6e147245754"
    }
  ]


const fetchPlatos = async () => {
        try {
            const response = await fetch(`${GET_PLATOS_ENDPOINT}`);
            const data = await response.json();
            console.log(data);
            setPlatos(data);
        } catch (error) {
            console.error("Error al cargar los platos:", error);
        }
    };

        useEffect(() => {
        fetchPlatos();
    }, []);

  return (
    <div className={styles.container}>
      <h1>Nuestros Platos</h1>

      <div className={styles.grid}>
        {platos.map((dish, index) => (
          <DishCard key={index} {...dish} />
        ))}
      </div>
    </div>
  )
}