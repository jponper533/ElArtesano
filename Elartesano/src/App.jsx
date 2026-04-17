import { BrowserRouter, Routes, Route } from "react-router-dom"
import { Layout } from "./layout/Layout"
import { Home } from "./pages/Home/Home"
import { Platos } from "./pages/Platos/Platos"
import { About_Us } from "./pages/About_Us/About_Us"
import { Login } from "./pages/SignIn/Login"
function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route element={<Layout />}>
          <Route path="/" element={<Home />} />
          <Route path="/platos" element={<Platos />} />
          <Route path="/about" element={<About_Us />} />
          <Route path="/signin" element={<Login />} />
        </Route>
      </Routes>
    </BrowserRouter>
  )
}

export default App