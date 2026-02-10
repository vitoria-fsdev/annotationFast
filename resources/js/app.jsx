import './bootstrap';
import { createInertiaApp } from '@inertiajs/react';
import { createRoot } from 'react-dom/client';
import '../css/app.css';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.tsx', { eager: true });
        
        let page = pages[`./Pages/${name}.tsx`];

        if (!page) {
            return pages[`./Pages/Login/Login.tsx`]; 
        }

        return page;
    },
    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />);
    },
});