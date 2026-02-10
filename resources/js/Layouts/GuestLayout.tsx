import React from 'react';

export default function GuestLayout({ children }: { children: React.ReactNode }) {
    return (
        <div className='min-h-screen flex flex-col justify-center items-center bg-[#483D8B]'>
            <div className='w-full max-w-md p-6 bg-white rounded-lg shadow-md'>
                {children}
            </div>
        </div>
    );
}