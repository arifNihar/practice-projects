import React, { useState } from 'react'
import Header from '../components/Header'
import SideBar from '../components/SideBar'

const Main = () => {
  const [openDrawer, setOpenDrawer] = useState(true);

  const toggleDrawer = () => {
    setOpenDrawer(prevState => !prevState);
  }
  return (
    <div>
      <Header toggleDrawer={toggleDrawer}/>
      <SideBar openDrawer={openDrawer} />
      <div className="main-content">Main</div>
    </div>
  )
}

export default Main;
