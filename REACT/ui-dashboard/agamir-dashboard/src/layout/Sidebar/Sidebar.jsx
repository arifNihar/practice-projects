import "./Sidebar.css";
import { personsImgs } from "../../utils/images";
import { navigationLinks } from "../../data/data";
import { useContext, useEffect, useState } from "react";
import { SidebarContext } from "../../context/sidebarContext";

const Sidebar = () => {
  const [activeLinkIdx] = useState(1);
  const [sidebarClass, setSidebarClass] = useState("");
  const {isSidebarOpen} = useContext(SidebarContext);
  
  useEffect(() => {
    if(isSidebarOpen) {
      setSidebarClass('sidebar-change');
    }else{
      setSidebarClass('');
    }
  },[isSidebarOpen]);

  return (
    <div className={`sidebar ${sidebarClass}`}>
      <div className="user-info">
        <div className="info-img img-fit-cover">
          <img src={personsImgs.person_two} alt="profile image" />
        </div>
        <span className="info-name">arif-khan</span>
      </div>
      <nav className="navigation">
        <ul className="nav-list">
          {navigationLinks.map((navLink) => (
            <li className="nav-item" key={navLink.id}>
              <a href="#" className={`nav-link ${navLink.id === activeLinkIdx ? 'active' : null }`}>
                <img
                  src={navLink.image}
                  className="nav-link-icon"
                  alt={navLink.title}
                />
                <span className="nav-link-text text-white">{navLink.title}</span>
              </a>
            </li>
          ))}
        </ul>
      </nav>
    </div>
  );
};

export default Sidebar;
