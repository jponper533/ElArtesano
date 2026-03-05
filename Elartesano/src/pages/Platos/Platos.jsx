import styles from "./Platos.module.css"
import { DishCard } from  "../../components/Dishcard/Dishcard"

export function Platos() {

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

  return (
    <div className={styles.container}>
      <h1>Nuestros Platos</h1>

      <div className={styles.grid}>
        {dishes.map((dish, index) => (
          <DishCard key={index} {...dish} />
        ))}
      </div>
    </div>
  )
}