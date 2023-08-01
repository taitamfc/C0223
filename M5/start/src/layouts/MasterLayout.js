import React from 'react';
import Header from './includes/Header';
import Footer from './includes/Footer';

function MasterLayout({ children }) {
    return (
        <div>
            <Header/>
            {children}
            <Footer/>
        </div>
    );
}

export default MasterLayout;