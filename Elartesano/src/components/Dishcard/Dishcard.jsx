import styles from "./Dishcard.module.css"

export function DishCard({ name, description, price, image }) {
  return (
    <div className={styles.card}>
      <img src={image} alt={name} />

      <div className={styles.content}>
        <h3>{name}</h3>
        <p>{description}</p>

        <div className={styles.footer}>
          <span>{price}€</span>
          <button>Pedir</button>
        </div>
      </div>
    </div>
  )
}