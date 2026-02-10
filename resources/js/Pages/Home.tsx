import React from 'react';

import HomeProps from './types/home';

export default function Home({ user, message }: HomeProps) {
    return (
        <div style={{ padding: '40px', fontFamily: 'sans-serif' }}>
            <h1>Página Home</h1>
            
            {user ? (
                <p>Bem-vindo de volta, <strong>{user}</strong>!</p>
            ) : (
                <p>Olá! Você está usando Laravel + React + Inertia.</p>
            )}

            <div style={{ marginTop: '20px', padding: '15px', background: '#f0f0f0', borderRadius: '8px' }}>
                <strong>Status do Backend:</strong> {message || 'Nenhuma mensagem recebida.'}
            </div>
        </div>
    );
}