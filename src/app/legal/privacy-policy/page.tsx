import type { Metadata } from "next";

export const metadata: Metadata = {
    title: "Privacy Policy | Mumbai Women Coders",
    description: "Our privacy policy and commitment to protecting your data.",
};

export default function PrivacyPolicyPage() {
    const formattedDate = new Date().toLocaleString('en-US', { month: 'long', year: 'numeric' });

    return (
        <main>
            <div className="container py-6 mt-5">
                <h1 className="display-4 fw-bold mb-4">Privacy Policy</h1>
                <p className="text-muted">Last updated: {formattedDate}</p>
                <div className="glass-card-premium p-5 mt-4">
                    <p className="lead">We value your privacy. This policy is currently being drafted and will be updated soon.</p>
                    <p>Mumbai Women Coders is committed to protecting the privacy of our members and website visitors. We only collect necessary information to provide our services and foster our community.</p>
                </div>
            </div>
        </main>
    );
}
