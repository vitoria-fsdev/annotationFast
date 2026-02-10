import React from 'react';
import { useForm } from '@inertiajs/react';

import GuestLayout from '../../Layouts/GuestLayout';
import TextInput from '../../Components/TextInput';
import LoginProps from './types/login';

export default function Login() {
    const { data, setData, post, processing, errors } = useForm({
        email: '',
        password: '',
    });

    const submit = (e: React.FormEvent) => {
        e.preventDefault();
        post('/login'); // Rota que criaremos no Laravel
    };

    return (
        <GuestLayout>
            <form onSubmit={submit}>
                <h2 className='text-2xl font-bold mb-6 text-center'>Login</h2>

                <TextInput 
                    label='E-mail'
                    type='email'
                    value={data.email}
                    onChange={(e: any) => setData('email', e.target.value)}
                />
                {errors.email && <div className='text-red-500 text-xs'>{errors.email}</div>}

                <TextInput 
                    label='Senha'
                    type='password'
                    value={data.password}
                    onChange={(e: any) => setData('password', e.target.value)}
                />

                <button 
                    disabled={processing}
                    className='w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition'
                >
                    {processing ? 'Entrando...' : 'Entrar'}
                </button>
            </form>
        </GuestLayout>
    );
}