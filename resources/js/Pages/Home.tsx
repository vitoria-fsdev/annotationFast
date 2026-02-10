import React from 'react';

import HomeProps from './types/home';

export default function Home({ users, message }: HomeProps) {
    return (
        <div style={{ padding: '20px' }}>
            <h1>{message}</h1>
            
            <table border={1} style={{ width: '100%', marginTop: '10px' }}>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    {users?.map(user => (
                        <tr key={user.id}>
                            <td>{user.id}</td>
                            <td>{user.name}</td>
                            <td>{user.email}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
}